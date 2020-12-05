const express = require('express');

const router = express.Router();

router.get('/', (req,res) =>{
  res.render('index')
});
  
router.get('/login', (req,res) => {
  res.render('login')
});
  
router.get('/world', (req,res) =>{
  res.render('world')
});

router.get('/support', (req,res) =>{
  res.render('support')
});

module.exports = router;