
const menuItems = document.querySelectorAll(".menu-item");

menuItems.forEach(item=>{

    item.addEventListener("click", ()=>{

        menuItems.forEach(i=>{
            i.classList.remove("active");
        });

        item.classList.add("active");

        const page = item.dataset.page;

        alert("Ouverture de : " + page);

    });

});


// ============================
// STATS CLICK
// ============================

const cards = document.querySelectorAll(".clickable-card");

cards.forEach(card=>{

    card.addEventListener("click", ()=>{

        const page = card.dataset.page;

        alert("Ouverture de : " + page);

    });

});


// ============================
// NOTIFICATIONS
// ============================

const notificationBtn = document.getElementById("notificationBtn");

notificationBtn.addEventListener("click", ()=>{

    alert(
        "4 nouvelles notifications :\n\n- Nouveau patient\n- Paiement reçu\n- RDV confirmé\n- Nouveau médecin"
    );

});


// ============================
// ACTIONS RAPIDES
// ============================

function addDoctor(){

    alert("Ouverture formulaire Ajouter Médecin");

}

function addPatient(){

    alert("Ouverture formulaire Ajouter Patient");

}

function createAppointment(){

    alert("Ouverture formulaire Rendez-vous");

}


// ============================
// DETAILS DOCTOR
// ============================

function showDoctor(){

    alert("Ouverture profil médecin");

}


// ============================
// TABLE ACTIONS
// ============================

document.addEventListener("click",(e)=>{

    if(e.target.classList.contains("delete-btn")){

        e.target.closest("tr").remove();

        alert("Rendez-vous supprimé");

    }

});

document.addEventListener("click",(e)=>{

    if(e.target.classList.contains("edit-btn")){

        alert("Modification du rendez-vous");

    }

});


// ============================
// SEARCH
// ============================

const searchInput = document.getElementById("searchInput");

searchInput.addEventListener("keyup", ()=>{

    let value = searchInput.value.toLowerCase();

    let rows = document.querySelectorAll("#appointmentTable tr");

    rows.forEach(row=>{

        row.style.display =
        row.innerText.toLowerCase().includes(value)
        ? ""
        : "none";

    });

});


// ============================
// CALENDRIER DYNAMIQUE
// ============================

const calendarDays = document.getElementById("calendarDays");

const monthName = document.getElementById("monthName");

let currentMonth = 9;
let currentYear = 2024;

const months = [
    "JANVIER",
    "FÉVRIER",
    "MARS",
    "AVRIL",
    "MAI",
    "JUIN",
    "JUILLET",
    "AOÛT",
    "SEPTEMBRE",
    "OCTOBRE",
    "NOVEMBRE",
    "DÉCEMBRE"
];

function renderCalendar(){

    calendarDays.innerHTML = "";

    monthName.innerText =
    months[currentMonth] + " " + currentYear;

    const daysInMonth =
    new Date(currentYear,currentMonth+1,0).getDate();

    for(let i=1;i<=daysInMonth;i++){

        const day = document.createElement("div");

        day.classList.add("day");

        day.innerText = i;

        day.addEventListener("click", ()=>{

            document.querySelectorAll(".day")
            .forEach(d=>{
                d.classList.remove("active-day");
            });

            day.classList.add("active-day");

            alert("Date sélectionnée : " + i);

        });

        calendarDays.appendChild(day);

    }

}

renderCalendar();

document.getElementById("prevMonth")
.addEventListener("click", ()=>{

    currentMonth--;

    if(currentMonth < 0){

        currentMonth = 11;

        currentYear--;

    }

    renderCalendar();

});

document.getElementById("nextMonth")
.addEventListener("click", ()=>{

    currentMonth++;

    if(currentMonth > 11){

        currentMonth = 0;

        currentYear++;

    }

    renderCalendar();

});


// ============================
// CHART RDV
// ============================
// ============================
// CHART RDV
// ============================

const ctx = document.getElementById("appointmentChart");

new Chart(ctx, {

    type: "bar",

    data: {

        labels: [
            "Lun",
            "Mar",
            "Mer",
            "Jeu",
            "Ven",
            "Sam",
            "Dim"
        ],

        datasets: [{

            data: [12, 19, 8, 25, 17, 22, 14],

            backgroundColor: [
                "#dbeafe",
                "#bfdbfe",
                "#93c5fd",
                "#2563eb",
                "#bfdbfe",
                "#93c5fd",
                "#bfdbfe"
            ],

            borderRadius: 10,
            barThickness: 25,
            maxBarThickness: 30

        }]

    },

    options: {

        responsive: true,
        maintainAspectRatio: false,

        plugins: {
            legend: {
                display: false
            }
        }

    }

});

// ============================
// CHART SPECIALITY
// ============================
// ============================
// CHART SPECIALITY
// ============================

const specialityChart = document.getElementById("specialityChart");

new Chart(specialityChart, {

    type: "doughnut",

    data: {

        labels: [
            "Généralistes",
            "Pédiatres",
            "Autres"
        ],

        datasets: [{

            data: [45, 25, 30],

            backgroundColor: [
                "#2563eb",
                "#f59e0b",
                "#d1d5db"
            ]

        }]

    },

    options: {

        responsive: true,
        maintainAspectRatio: false,

        plugins: {
            legend: {
                position: "bottom"
            }
        }

    }

});