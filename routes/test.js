var express = require('express');
var router = express.Router();
var mongoose = require('mongoose');


router.get('/', function(req, res, next) {
  res.send('respond with a resource');
});

router.get('/blog',function(req,res){
  var personSchema = new mongoose.Schema({
    name    : String,
    age     : Number
  });
  
  var Person = mongoose.model('Person', personSchema);
  
  var aaron = new Person({
    name: 'Antoine',
    age: 15 
  });
  aaron.save(function (err) {
    if (err) return handleError(err);
  });
  
  
  res.send('plop');
});

router.get('/plop',function(req,res){
  var personSchema = new mongoose.Schema({
    name    : String,
    age     : Number
  });
  Person = mongoose.model('Person', personSchema);
  
  Person.findOne({name:"Antoine"}, function (err, comms){
    if (err) { throw err; }
    // comms est un tableau de hash
    console.log(comms);

    var storySchema = new mongoose.Schema({
      creator : [{ type: mongoose.Schema.Types.Object, ref: 'Person' }],
      title : String,
      nbPage : Number
    });

    var Story  = mongoose.model('Story', storySchema);

    var story1 = new Story({
      creator: [],
      title: "Once upon a timex.",
      nbPage: 100
    });
    
    story1.creator.push(comms._id);
    //story1._creator.push(comms._id);

    story1.save(function (err) {
      if (err) return handleError(err);
      // thats it!
    });
  });
  res.send('ahah');
});

router.get('/yahou',function(req,res){
  var personSchema = new mongoose.Schema({
    name    : String,
    age     : Number
  });
  Person = mongoose.model('Person', personSchema);
  
  var storySchema = new mongoose.Schema({
    creator : [{ type: Object, ref: 'Person' }],
    title    : String,
    nbPage : Number
  });

  var Story  = mongoose.model('Story', storySchema);

  Story
    .findOne({ title: 'Once upon a timex.' })
    .populate('creator')
    .exec(function (err, story) {
      if (err) return handleError(err);
      console.log('The creator is %s', story._creator.name);
      // prints "The creator is Aaron"
  });
  res.send('petitGars');
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

module.exports = router;