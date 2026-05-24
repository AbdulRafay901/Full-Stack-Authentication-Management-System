let page = 1;

function setpage(p){
    page = p;
    console.log(page)
}

function getpage(){
    return page;
    console.log(page)
}

console.log(page)

async function List(){
    
      try {

        await fetch("http://127.0.0.1:8002/sanctum/csrf-cookie", {
            credentials: 'include'
        });
      
    const res = await fetch(`http://127.0.0.1:8002/api/students?page=${page}`,
        {
            method: "GET",
            credentials: 'include',
            headers: {'Content-Type': 'application/json',
            },
        })  
        
        const data = await res.json();
        
        r(data)

        console.log(data);
        
        return data
        
      } catch (error) {
            console.log(error)
      }

}
    

function r(data){

        let users = document.getElementById("users");

        users.innerHTML = "";

        data.data.forEach(d => {

            users.innerHTML += `
            <div class="details users">
                <div class="checkbox">
                    <input type="checkbox" name="checkbox" class="checkbox" value="${d.id}">
                </div>
                <div class="Name"><p>${d.Name}</p></div>
                <div class="Name"><p>${d.Email}</p></div>
                <div class="Name"><p>${d.Address}</p></div>
                <div class="Name"><p>${d.Phone}</p></div>
                <div class="Name action">
                    <i class="ri-pencil-fill Edit" id="${d.id}"></i>
                    <i class="ri-delete-bin-2-fill Delete" id="${d.id}"></i>
                </div>
            </div>
        `;
            
        });


        const numbers = document.getElementById("numbers");

        let n = 1;

        numbers.innerHTML = "";

        for(n = 1; n <= data.last_page; n++){
            numbers.innerHTML += `
                <button class="n" page-number="${n}">${n}</button>
            `;
        }

}













