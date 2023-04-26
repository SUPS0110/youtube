var username=document.getElementById('username');
var password=document.getElementById('password');
var submitbtn=document.getElementById('button');
submitbtn.addEventListener("click",function(){
    var uname=username.value;
    var pass=password.value;
    var data={
        'username':uname,
        'password':pass
    };
    fetch("http://localhost/complete/api/users/check.php",
    {
method:'POST',
body: JSON.stringify(data)
    })
    .then(response=>{
        response.text().then(output => {
            console.log(output)
        })
    })
})