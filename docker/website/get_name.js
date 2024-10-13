const getEndpoint = "http://localhost:5000/contactinfo";
const div = document.getElementById('text');

const fetchName = () => {
    fetch(getEndpoint)
        .then(response => {
            if (response.ok) {
                if (response.status === 404){
                    console.warn("Not found");
                    throw Error("Not found");
                }
            }
            return response.json()
        })
        .then(data => {
            const name = data.name
            let name_and_text = `
                ${name} has reached Milestone 1!!
                `;
            div.innerHTML = name_and_text;

        })
        .catch((error) => {
            console.warn(error)
            div.innerHTML = ` 
                <h2 class="text-center pt-4 pb-5">Error</h2>
                <h3 class="text-center pt-4 pb-5">${error}</h3>
            `;
        });
}

fetchName();
