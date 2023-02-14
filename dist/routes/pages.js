import { Router } from "express";
const pagesRouter = Router();
pagesRouter.get('/', (req, res, next) => {
    res.render('index');
});
export { pagesRouter };
