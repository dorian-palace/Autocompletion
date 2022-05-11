document.addEventListener("DOMContentLoaded", (event) => {

    const results = [];
    const form = document.querySelector('.form')
    const searchInput = document.querySelector('.input')
    const clear = document.getElementById('clear')
    const url = 'traitement.php'
    res = document.getElementById("list");

    searchInput.addEventListener("keyup", (e) => {

        //prend la valeur de ce qui est tapé dans la barre de recherche
        let value = e.target.value

        // check si la valeur entré est supérieur a 0
        if (value && value.trim().length > 0) {

            value = value.trim().toLowerCase()
            // console.log(searchInput.value)

            let formData = new FormData()
            formData.append('search', searchInput.value)
            // console.log(formData)
            // a append plus bas apores le fetch

            fetch(url, {
                    method: 'POST',
                    body: formData
                })
                .then(response => response.json())
                // return console.log(response)
                .then(data => {
                    // console.log(data)
                    res.innerHTML = "";

                    let strStart = data.startResult;
                    let strAll = data.allResult;
                    // console.table(strStart)
                    // console.table(strAll)

                    if (data.length !== 0) {
                        // console.log(data)
                        for (i = 0; i < strStart.length; i++) {

                            // console.table(strStart[i])
                            // console.table(strAll[i])
                            const myJSON = JSON.stringify(strStart[i].nom); 
                            // const myJsonName = myJSON.nom
                            console.log(myJSON)
                            res.innerHTML += "<li>" + myJSON + "</li>";
                            // console.table(myJSON)
                            // console.log(data)
                            // console.log(res)
                        }
                    }
                })

        } else {

        }

    })

    clear.addEventListener("click", () => {

    })



})