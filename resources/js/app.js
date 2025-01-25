import "./bootstrap";

document.getElementById("showButton").addEventListener("click", function () {
    fetch("/generate-rfid", {
        method: "POST",
        headers: {
            "Content-Type": "application/json",
            "X-CSRF-TOKEN": document
                .querySelector('meta[name="csrf-token"]')
                .getAttribute("content"),
        },
    })
        .then((response) => response.json())
        .then((data) => {
            document.getElementById("uidDisplay").textContent =
                data.data.rfid_uid;
            document.getElementById("modal").classList.remove("hidden");
        })
        .catch((error) => console.error("Error:", error));
});

document.getElementById("saveButton").addEventListener("click", function () {
    document.getElementById("modal").classList.add("hidden");
});
