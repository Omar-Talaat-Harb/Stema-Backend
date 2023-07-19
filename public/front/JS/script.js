/////////////////// forget password page////////////

var send = document.getElementById("send-code")
var para1 = document.getElementById("text1")
var para2 = document.getElementById("text2")
var para3 = document.getElementById("text3")
var btn1 = document.getElementById("back")
var einp = document.getElementById("email")
var sub = document.getElementById("submit")
var reset = document.getElementById("reset")
var mydiv = document.getElementsByClassName("right-side")[0]
var label1 = document.getElementsByClassName("emLabel")[0]
var input1 = document.getElementsByClassName("code-inp")[0]
var input2 = document.getElementsByClassName("code-inp")[1]
var input3 = document.getElementsByClassName("code-inp")[2]
var input4 = document.getElementsByClassName("code-inp")[3]
var input5 = document.getElementsByClassName("code-inp")[4]

/////////////////////////// profile page/////////////////////////////////

var pass1 = document.getElementsByClassName("pass")[0]
var pass2 = document.getElementsByClassName("pass")[1]
var pass3 = document.getElementsByClassName("pass")[2]
var pass4 = document.getElementsByClassName("pass")[3]
var changePass = document.getElementsByClassName("changePass")[0]
var chp1 = document.getElementsByClassName("change-pass")[0]
var chp2 = document.getElementsByClassName("change-pass")[1]
var chp3 = document.getElementsByClassName("change-pass")[2]
var chp4 = document.getElementsByClassName("change-pass")[3]
var chp5 = document.getElementsByClassName("change-pass")[4]
var chp6 = document.getElementsByClassName("change-pass")[5]
var chp7 = document.getElementsByClassName("change-pass")[6]
var base1 = document.getElementsByClassName("basic-info")[0]
var base2 = document.getElementsByClassName("basic-info")[1]
var base3 = document.getElementsByClassName("basic-info")[2]
var base4 = document.getElementsByClassName("basic-info")[3]
var base5 = document.getElementsByClassName("basic-info")[4]
var base6 = document.getElementsByClassName("basic-info")[5]
var base = document.getElementsByClassName("base")[0]
// changePass.addEventListener("click",function(){
//     console.log('good connected')
// })
//base.addEventListener("click", returning)

//////////////////////  dashboard page//////////////////////////

var inp0 = document.getElementsByClassName("entry")[0]
var inp1 = document.getElementsByClassName("entry")[1]
var inp2 = document.getElementsByClassName("entry")[2]
var inp3 = document.getElementsByClassName("entry")[3]
var inp4 = document.getElementsByClassName("entry")[4]
var inp5 = document.getElementsByClassName("entry")[5]
var inp6 = document.getElementsByClassName("entry")[6]
var inp7 = document.getElementsByClassName("entry")[7]
var inp8 = document.getElementsByClassName("entry")[8]
var inp9 = document.getElementsByClassName("entry")[9]
var inp10 = document.getElementsByClassName("entry")[10]
var inp11 = document.getElementsByClassName("entry")[11]
var mydonor = document.getElementsByClassName("mydonor")[0]
var page = document.getElementsByClassName("page")[0]
var nxt = document.getElementById("toggle")
// nxt.addEventListener("click", next)
// send.addEventListener("click", Sending)
// sub.addEventListener("click", Submitting)





function Sending() {

    para1.innerHTML = "Authenticate your account"
    para2.innerHTML = "Please confirm your account by entering the authorization code sent to your email. "
    para3.style.display = "block"
    input1.style.display = "block"
    input2.style.display = "block"
    input3.style.display = "block"
    input4.style.display = "block"
    input5.style.display = "block"
    sub.style.display = "block"
    label1.innerHTML = ""
    einp.style.display = "none"
    btn1.parentNode.removeChild(btn1);
    send.parentNode.removeChild(send);
    console.log("java is connected successfully")

}

function Submitting() {

    para1.innerHTML = "Change your password"
    para2.innerHTML = "Please confirm your account by entering the authorization code sent to your email. "
    einp.style.display = "none"
    para3.style.display = "none"
    input1.style.display = "none"
    input2.style.display = "none"
    input3.style.display = "none"
    input4.style.display = "none"
    input5.style.display = "none"
    pass1.style.display = "block"
    pass2.style.display = "block"
    pass3.style.display = "block"
    pass4.style.display = "block"
    reset.style.display = "block"
    sub.parentNode.removeChild(sub);
    console.log("java is connected successfully")

}

function Changing() {

    base1.style.display = "none"
    base2.style.display = "none"
    base3.style.display = "none"
    base4.style.display = "none"
    base5.style.display = "none"
    base6.style.display = "none"

    chp1.style.display = "block"
    chp2.style.display = "block"
    chp3.style.display = "block"
    chp4.style.display = "block"
    chp5.style.display = "block"
    chp6.style.display = "block"
    chp7.style.display = "block"

    changePass.style.color = "black"
    changePass.style.cursor = "default"
    changePass.style.textDecoration = "none"

    base.style.color = "gray"
    base.addEventListener("mouseenter", function () {
        base.style.color = "black"
        base.style.cursor = "pointer"
        base.style.textDecoration = "underline"

    })
    base.addEventListener("mouseleave", function () {
        //base.style.color = "gray"
        base.style.cursor = "default"
        base.style.textDecoration = "none"

    })


    console.log("java is connected successfully")

}

function returning() {

    chp1.style.display = "none"
    chp2.style.display = "none"
    chp3.style.display = "none"
    chp4.style.display = "none"
    chp5.style.display = "none"
    chp6.style.display = "none"
    chp7.style.display = "none"

    base1.style.display = "block"
    base2.style.display = "block"
    base3.style.display = "block"
    base4.style.display = "block"
    base5.style.display = "block"
    base6.style.display = "block"


    base.style.color = "black"
    base.style.cursor = "default"
    base.style.textDecoration = "none"

    changePass.style.color = "gray"

    changePass.addEventListener("mouseenter", function () {
        changePass.style.color = "black"
        changePass.style.cursor = "pointer"
        changePass.style.textDecoration = "underline"

    })
    changePass.addEventListener("mouseleave", function () {
        //changePass.style.color = "gray"
        changePass.style.cursor = "default"
        changePass.style.textDecoration = "none"

    })

}

function next() {

    inp0.style.display = "none"
    inp1.style.display = "none"
    inp2.style.display = "none"
    inp3.style.display = "none"
    inp4.style.display = "none"
    inp5.style.display = "none"
    inp6.style.display = "none"
    inp7.style.display = "none"
    inp8.style.display = "none"
    inp9.style.display = "none"
    inp10.style.display = "none"
    inp11.style.display = "none"
    mydonor.style.display = "none"
    page.style.display = "none"
    nxt.parentNode.removeChild(nxt)
    console.log("running")
}

// Chart1 -- donate 
