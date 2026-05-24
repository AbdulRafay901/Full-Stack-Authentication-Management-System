
let body = document.querySelector("#body");

let loading = document.querySelector("#loading");

async function TokenCheck(){
    try {

        const res = await api.get("/api/me/");

        if(!res.data.status){
            window.location.replace("/login");
            return;
        }   

        console.log(res)

        loading.style.display = 'none'
        body.style.display = 'block';
        
        
    } catch (error) {
        window.location.replace("/login");
        console.log(error.response)
    } 
}

TokenCheck()