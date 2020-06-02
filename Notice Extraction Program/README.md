#This directory contains the Notification extraction program.

The app.js file if executed, extracts the titles and links of the latest 10 circulars updated on the vtu website and saves them in the data.json file. The data.json file if extracted and parsed, will give an object with "notices" as its first and the only key, the value of which is an array of objects containing the details of each circulars published on the website.
The program can be executed with nodeJS. The only required external dependency is 'puppeteer'. 

