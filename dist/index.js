var __awaiter = (this && this.__awaiter) || function (thisArg, _arguments, P, generator) {
    function adopt(value) { return value instanceof P ? value : new P(function (resolve) { resolve(value); }); }
    return new (P || (P = Promise))(function (resolve, reject) {
        function fulfilled(value) { try { step(generator.next(value)); } catch (e) { reject(e); } }
        function rejected(value) { try { step(generator["throw"](value)); } catch (e) { reject(e); } }
        function step(result) { result.done ? resolve(result.value) : adopt(result.value).then(fulfilled, rejected); }
        step((generator = generator.apply(thisArg, _arguments || [])).next());
    });
};
import express from "express";
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
function start() {
    return __awaiter(this, void 0, void 0, function* () {
        try {
            app.listen(PORT, () => {
                console.log(`Server hsa been started. App listening on port ${PORT}`);
            });
        }
        catch (e) {
            console.log(`Error while starting  server: ${e === null || e === void 0 ? void 0 : e.message}`);
        }
    });
}
;
start();
