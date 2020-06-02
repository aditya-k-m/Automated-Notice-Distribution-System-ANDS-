//Version 1.0 (Test) 
//dated, 31-05-2020
//authored, aditya_k_m
const puppeteer = require('puppeteer');
const fs = require('fs');

let url = 'https://vtu.ac.in/en/category/administration-circulars/';

let notices = [];

async function scrapeVtu(url) {
    const browser = await puppeteer.launch();
    const page = await browser.newPage();
    await page.goto(url);

    const articles = await page.$$('#main div article div div.entry-content.no-thumbnail header h2 a');

    for (let i = 0; i < articles.length; i++){
        const article = await (await articles[i].getProperty('innerText')).jsonValue();
        const linkTemp = await (await articles[i].getProperty('href')).jsonValue();
        let notice = {
            title: article,
            link: linkTemp
        }
        notices.push(notice);
    }
    let json = JSON.stringify({notices});
    fs.writeFile("data.json", json, (err) => {
    if (err){
        console.log(err);
    }
    else{
        console.log("JSON file created");
    }
});
    console.log(notices);

    browser.close();
}

scrapeVtu(url);


