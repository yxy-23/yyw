<<?php
var nodemailer=require('nodemailer');
var transporter = nodemailer.createTransport('STMP',{
    host:"stmp.163.com";
    secureConnection:true,
    port:465;
    auth:{
        user:'15927824100@163.com',
        pass:'690612yxy'
    }
});
var msg={
    from:'15927824100@163.com',
    to:'13972138470@163.com',
    subject:'hello',
    text:i love you!
};
email.sendmail(msg,function(err,data){
    res.send({error:0});
    email.close();
})

?>
