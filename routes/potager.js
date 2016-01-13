var express = require('express');
var router = express.Router();

/*
  Définition du parametre id pour les routes liées aux potagers
 */
router.param('id', function(req, res, next, id) {
  // try to get the user details from the User model and attach it to the request object
  // Potager.find(id, function(err, potager) {
  //   if (err) {
  //     next(err);
  //   } else if (potager) {
  //     req.potager = potager;
  //     next();
  //   } else {
  //     next(new Error('failed to load potager'));
  //   }
    console.log('id');
    next();
//   });
});



router.get('/:id', function(req, res, next) {
  console.log('plop', req.params.id);
  console.log('params', req.params);
  res.render('potager', {
    title: appName + " | Potager | Nom",
    potager: { id: req.params.id},
    user : req.user
  });
});

//  var username = request.params.username;
//  findUserByUsername(username, function(error, user) {
//    if (error) return next(error);
//    return response.render('user', user);
//  });
//});

router.post('/create', function(req, res, next) {
  res.render('search');
});

router.post('/update', function(req, res, next) {
  res.render('search');
});

router.post('/delete', function(req, res, next) {
  res.render('search');
});

module.exports = router;
