var express = require('express');
var yewu = require('./yewu');
var router = express.Router();

// router.get('/',(req,res)=>{
//     yewu.getall(req,res);
// })
// router.get('/getone',(req,res)=>{
//     yewu.getone(req,res);
// })


// router
// // .get('/',(req,res)=>{
// //     yewu.getall(req,res);
// // })
// .get('/getone',(req,res)=>{
//     yewu.getone(req,res);
// })

router
.get('/',yewu.getall)
.get('/getone',yewu.getone)
.get('/upuser',yewu.upuser_get)
.post('/upuser',yewu.upuser_post)
.get('/delete',yewu.delete_user)
.get('/login',yewu.login_get)
.post('/login',yewu.login_post)



module.exports = router;