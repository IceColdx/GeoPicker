const express = require('express');
const app = express();
const router = express.Router();
const db = require('./database/db')
const colors = require('colors/safe');


app.set('view engine', 'hbs')

//add the router
app.use('/', require('./routes/pages'));
app.use(express.static(__dirname + '/public'));

app.listen(5001, () => {
  console.log(colors.green("Geopicker server started on Port", colors.white("|"), colors.cyan("(5001)")))
})