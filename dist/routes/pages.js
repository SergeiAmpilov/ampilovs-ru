"use strict";
Object.defineProperty(exports, "__esModule", { value: true });
exports.pagesRouter = void 0;
const express_1 = require("express");
const pagesRouter = (0, express_1.Router)();
exports.pagesRouter = pagesRouter;
pagesRouter.get('/', (req, res, next) => {
    res.render('index');
});
