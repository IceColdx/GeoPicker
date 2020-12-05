const mysql = require('mysql');
const dotenv = require('dotenv');
const colors = require('colors/safe');

dotenv.config({ path: './.env'});

const db = mysql.createConnection({
  host: process.env.DATABASE_HOST,
  port: process.env.DATABASE_PORT,
  user: process.env.DATABASE_USER,
  password: process.env.DATABASE_PASSWORD,
  database: process.env.DATABASE
});

db.connect( (error) => {
  if(error) {
    console.log(error)
  } else {
    console.log(colors.green('MySQL database connected to the server! on port', colors.white("|"), colors.cyan('(3308)')))
  }
})

module.exports = db;