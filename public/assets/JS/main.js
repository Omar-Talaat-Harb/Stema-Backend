function weather() {
    fetch("http://api.weatherapi.com/v1/current.json?key=824a4ffa36e54650a65140311212512&q=Egypt&aqi=no")

        .then(response => {
            console.log(response);
            if (!response.ok) {
                throw Error("ERROR");
            }
            return response.json();
            // console.log(response);
        }).then(data => {
            console.log(data.location);
            console.log(data.current);
            
            const firsth = data.location
            const current=data.current
            

            function city() {
                return firsth.name + " , " + firsth.country;
            };



            document.getElementsByClassName("headerweathE")[0].innerHTML=city();
                
            // document.querySelector("#app .card .titleweathE").append("http:",current.condition.icon);
            
            // const icon="http:"+current.condition.icon
// icon +"</br>"+
            document.getElementsByClassName("titleweathE")[0].innerHTML="Feels Like : "+ current.feelslike_c+" C , "+current.feelslike_f+" F "+"</br>"+current.condition.text;
           
            document.getElementsByClassName("timeweath")[0].innerHTML="Update : "+firsth.localtime;

            document.getElementsByClassName("hamiweath")[0].innerHTML="Humidity : "+current.humidity;
            document.getElementsByClassName("wind-dirweath")[0].innerHTML="Wind dir : "+current.wind_dir;
            document.getElementsByClassName("cloudweath")[0].innerHTML="Cloud : "+current.cloud;





        })
        .catch(error => {
            console.log(error);
        });

//////////end Egypt///

fetch("http://api.weatherapi.com/v1/current.json?key=824a4ffa36e54650a65140311212512&q=Korea&aqi=no")

.then(response => {
    console.log(response);
    if (!response.ok) {
        throw Error("ERROR");
    }
    return response.json();
    // console.log(response);
}).then(data => {
    console.log(data.location);
    console.log(data.current);
    
    const firsth = data.location
    const current=data.current
    // var city=[]
    // for (x in firsth){
    //     city=firsth[x] +"\n ";
    //     // console.log(city)
    // }

    function city() {
        return firsth.name + " , " + firsth.country;
    };

    


    document.getElementsByClassName("headerweathE")[1].innerHTML=city();
        
    // document.querySelector("#app .card .titleweathE").append("http:",current.condition.icon);
    
    // const icon="http:"+current.condition.icon
// icon +"</br>"+
    document.getElementsByClassName("titleweathE")[1].innerHTML="Feels Like : "+ current.feelslike_c+" C , "+current.feelslike_f+" F "+"</br>"+current.condition.text;
   
    document.getElementsByClassName("timeweath")[1].innerHTML="Update : "+firsth.localtime;

    document.getElementsByClassName("hamiweath")[1].innerHTML="Humidity : "+current.humidity;
    document.getElementsByClassName("wind-dirweath")[1].innerHTML="Wind dir : "+current.wind_dir;
    document.getElementsByClassName("cloudweath")[1].innerHTML="Cloud : "+current.cloud;


})
.catch(error => {
    console.log(error);
});

///////////end Korea///////

        fetch("https://api.weatherapi.com/v1/current.json?key=824a4ffa36e54650a65140311212512&q=France&aqi=no")

        .then(response => {
            console.log(response);
            if (!response.ok) {
                throw Error("ERROR");
            }
            return response.json();
            // console.log(response);
        }).then(data => {
            console.log(data.location);
            console.log(data.current);

            const firsth = data.location
            const current=data.current

            function city() {
                return firsth.name + " , " + firsth.country;
            };

            


            document.getElementsByClassName("headerweathE")[2].innerHTML=city();
                
            // document.querySelector("#app .card .titleweathE").append("http:",current.condition.icon);
            
            // const icon="http:"+current.condition.icon
// icon +"</br>"+
            document.getElementsByClassName("titleweathE")[2].innerHTML="Feels Like : "+ current.feelslike_c+" C , "+current.feelslike_f+" F "+"</br>"+current.condition.text;
           
            document.getElementsByClassName("timeweath")[2].innerHTML="Update : "+firsth.localtime;

            document.getElementsByClassName("hamiweath")[2].innerHTML="Humidity : "+current.humidity;
            document.getElementsByClassName("wind-dirweath")[2].innerHTML="Wind dir : "+current.wind_dir;
            document.getElementsByClassName("cloudweath")[2].innerHTML="Cloud : "+current.cloud;


        })
        .catch(error => {
            console.log(error);
        });
        ////////end France/////////



}


weather();