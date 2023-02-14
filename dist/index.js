import express from "express";
const app = express();
const { PORT = 7000 } = process.env;
app.get('/', (req, res) => {
    res.status(200).json('Hello world');
});
app.listen(PORT, () => {
    console.log(`Server hsa been started. App listening on port ${PORT}`);
});
