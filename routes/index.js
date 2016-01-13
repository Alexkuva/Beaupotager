var express = require('express');
var passport = require('passport');
var User = require('../models/utilisateur');
var router = express.Router();
var moment = require('moment');
moment.locale('fr');
var mongoose = require('mongoose');

var headlineArray = ['Où trouver un potager près de chez vous ?','Où trouver un maraîcher bio près de chez vous ?','Où trouver des fruits et légumes bios près ce chez vous ?' ];

router.get('/', function (req, res)  { Accueil
  var randomNumber = Math.floor(Math.random() * 3);
  res.render('index', {
    title: appName + " | Accueil",
    user : req.user,
    headline : headlineArray[randomNumber]
  });

});

router.get('/signup', function(req, res) {
  res.render('signup', {
    title: appName + " | Inscription"
   });
});


router.get('/blog',function(req,res){
  var blogSchema = new mongoose.Schema({
    nom :  String,
    url : String,
    auteur: String,
    nbVue : Number
  });
});

router.get('/db',function(req,res){
  var blogSchema = new mongoose.Schema({
    nom :  String,
    url : String,
    auteur: String,
    nbVue : Number
  });


  var commentaireArticleSchema = new mongoose.Schema({
    pseudo :  String,
    contenu : String
  });

  var articleSchema = mongoose.Schema({
    titre : String,
    type : String,
    monArticle : [commentaireArticleSchema]
  });
  var articleM = mongoose.model('article', articleSchema);
  var MyArticle = new articleM({ titre : 'Test2', type:'Article', commentaire:[] });
  MyArticle.monArticle.push({ pseudo: 'My comment',contenu:'Salut petit commentaire' });
  MyArticle.save(function (err) {
      // do something
    });
});

router.post('/signup', function(req, res) {

    var date = moment().format("DD/MM/YYYY"); // Number

    var userNewsletter = req.body.usernewsletter;
    var userInfoPartner = req.body.userinfopartner;
    // Test Newsletter et Infopartner
    if(userNewsletter=="on"){userNewsletter=1;}
    else{userNewsletter=0;}
    if(userInfoPartner=="on"){userInfoPartner=1;}
    else{userInfoPartner=0;}

    User.register(new User({
      username : req.body.username,
      prenom: req.body.userfirstname,
      nom: req.body.userfamilyname,
      email: req.body.useremail,
      numero:req.body.phone,
      dateInscription:date,
      newsletter:userNewsletter,
      infoPartenaires:userInfoPartner
    }), req.body.password, function(err, account) {
        if (err) {
          console.log(err);
          return res.render("signup", {info: "Sorry. That username already exists. Try again."});
        }

        passport.authenticate('local')(req, res, function () {
            res.redirect('/');
        });
    });
});

router.get('/login', function(req, res) {
    res.render('login', {
      title: appName + " | Inscription",
      user : req.user
    });
});

router.get('/login_old', function(req, res) {
    res.render('login_old', { user : req.user });
});

router.post('/login', function handleLocalAuthentication(req, res, next) {

    passport.authenticate('local', function(err, user, info) {
        if (err) return next(err);
        if (!user) {
            return res.render("login",{
              title: appName + " | Inscription",
              info: info.message})
        }

        // Manually establish the session...
        req.login(user, function(err) {
            if (err) return next(err);
              res.redirect('/');
        });

    })(req, res, next);
});


router.get('/logout', function(req, res) {
    req.logout();
    res.redirect('/');
});

/**
 * Route pour la recherche (header ou page d'accueil)
 * query est le paramètre contenant la requête.
*/
router.get('/search', function(req, res, next) {
  var nbPotager = 7;
  res.render('result', {
    title: appName + " | Recherche",
    nbPotager: nbPotager,
    user : req.user
  });
});

module.exports = router;
