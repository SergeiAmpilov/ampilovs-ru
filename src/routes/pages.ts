import { NextFunction, Request, Response, Router } from "express";


const pagesRouter = Router();

pagesRouter.get('/', (req: Request, res: Response, next: NextFunction) => {
  res.render('index');
})




export { pagesRouter };