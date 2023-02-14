import express, { Request, Response } from "express";
import { ExpressHandlebars } from 'express-handlebars';
import { pagesRouter } from "./routes/pages.js";

const { PORT = 7000 } = process.env;
const app = express();
const hbs = new ExpressHandlebars({
  defaultLayout: 'main',
  extname: 'hbs'
});

app.engine('hbs', hbs.engine);
app.set('view engine', 'hbs');
app.set('views', 'views');

app.use(pagesRouter);

async function start() {
  try {
    app.listen(PORT, () => {
      console.log(`Server hsa been started. App listening on port ${PORT}`)
    });    
  } catch(e: any) {
    console.log(`Error while starting  server: ${e?.message}`);
  }
};

start();