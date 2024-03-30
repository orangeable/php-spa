// handle page navigation:
function Navigate(page) {
    let container = document.getElementById("content");

    fetch("page/" + page + ".php")
        .then(response => response.text())
        .then(html => {
            container.innerHTML = html;
        })
        .catch(error => {
            console.error("Error fetching page: ", error);
        }
    );
}


// event listener for navigation links:
document.querySelectorAll("nav a").forEach(link => {
    link.addEventListener("click", function(event) {
        event.preventDefault();

        let page = this.getAttribute("href").substring(1);

        Navigate(page);

        history.pushState({}, null, page);
    });
});
