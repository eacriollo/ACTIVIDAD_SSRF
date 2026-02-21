const API_BASE = "http://actividad1_2.test/api";

console.log("API BASE:", API_BASE);

function send(endpoint) {
    fetch(API_BASE + endpoint, {
        method: "POST",
        headers: {
            "Content-Type": "application/json"
        },
        body: JSON.stringify({
            endpoint: document.getElementById("endpoint").value
        })
    })
    .then(res => res.json())
    .then(data => {
        document.getElementById("result").textContent =
            JSON.stringify(data, null, 2);
    })
    .catch(err => console.error(err));
}
