var mongoose = require('mongoose');
var Schema = mongoose.Schema;
var passportLocalMongoose = require('passport-local-mongoose');

var Account = new Schema({
    username: String,
    email: String,
    password: String
});

options = ({IncorrectUsernameError:"Wrong pseudo", IncorrectPasswordError:"Wrong password", MissingUsernameError:"MissingUsernameError", MissingPasswordError: "Wrong password", UserExistsError:"User already exist"});

Account.plugin(passportLocalMongoose, options);

module.exports = mongoose.model('Account', Account);

//var options = ({usernameField: "pseudo" });


module.exports = mongoose.model('Account', Account);

/*IncorrectUsernameError:"Wrong pseudo", IncorrectPasswordError:"Wrong password", MissingUsernameError:"MissingUsernameError", MissingPasswordError: "Wrong password", UserExistsError:"User already exist"*/
