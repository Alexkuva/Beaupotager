var express = require('express');
var router = express.Router();

/* GET users listing. */
router.get('/', function(req, res, next) {
  res.send('respond with a resource');
});


router.get('/profile', function(req, res, next) {
   if (req.isAuthenticated()){
    res.render('profile',{user : req.user });
   }
  else{
    res.status(401).send("Unauthorized");
  }
});

module.exports = router;
