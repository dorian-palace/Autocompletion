document.addEventListener("DOMContentLoaded", (event) => {

    const dbResult = [];
    const form = document.querySelector('.form')
    const searchInput = document.querySelector('.input')
    const clear = document.getElementById('clear')
    const url = 'traitement.php'

    // console.table(formData)



    searchInput.addEventListener("keyup", (e) => {

        
        //prend la valeur de ce qui est tapé dans la barre de recherche
        let value = e.target.value
        
        // check si la valeur entré est supérieur a 0
        if (value && value.trim().length > 0) {
            
            value = value.trim().toLowerCase()
            console.log(searchInput.value)
            
            let formData = new FormData()
            formData.append('search', searchInput.value) 
            // console.log(formData)
            // a append plus bas apores le fetch

            fetch(url, { method: 'POST', body: formData })
            .then(function (response) {
            return response.text();
            // return console.log(response)
            })
            .then(function (response){
                return response;
            })
          
            

        } else {

        }



        // console.table(value)
    })

    clear.addEventListener("click", () => {

    })



})