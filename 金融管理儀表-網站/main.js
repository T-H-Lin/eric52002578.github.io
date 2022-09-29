let BTCAPI = axios.get(
    "https://finnhub.io/api/v1/crypto/candle?symbol=BINANCE:BTCUSDT&resolution=W&from=1661961600&to=1664553599&token=ccls45aad3ibr9ofes20ccls45aad3ibr9ofes2g"
);
let ETHAPI = axios.get(
    "https://finnhub.io/api/v1/crypto/candle?symbol=BINANCE:ETHUSDT&resolution=W&from=1661961600&to=1664553599&token=ccls45aad3ibr9ofes20ccls45aad3ibr9ofes2g"
);

axios
    .all([BTCAPI, ETHAPI])
    .then(
        axios.spread((BTCAPI, ETHAPI) => {
            let BTCDATA = BTCAPI.data.c;
            let ETHDATA = ETHAPI.data.c;
            const chart = document.querySelector("#chart").getContext("2d");

            new Chart(chart, {
                type: "line",
                data: {
                    labels: ["W1", "W2", "W3", "W4"],

                    datasets: [
                        {
                            label: "BTC",
                            data: [BTCDATA[0], BTCDATA[1], BTCDATA[2], BTCDATA[3]],
                            borderColor: "red",
                            borderWidth: 2,
                        },
                        {
                            label: "ETH",
                            data: [ETHDATA[0], ETHDATA[1], ETHDATA[2], ETHDATA[3]],
                            borderColor: "blue",
                            borderWidth: 2,
                        },
                    ],
                },
                options: {
                    responsive: true,
                },
            });
        })
    )
    .catch((err) => console.log(err));

const menuBtn = document.querySelector("#menu-btn");
const closeBtn = document.querySelector("#close-btn");
const sidebar = document.querySelector("aside");

menuBtn.addEventListener("click", () => {
    sidebar.style.display = "block";
});

closeBtn.addEventListener("click", () => {
    sidebar.style.display = "none";
});

const themeBtn = document.querySelector(".theme-btn");

themeBtn.addEventListener("click", () => {
    document.body.classList.toggle("dark-theme");

    themeBtn.querySelector("span:first-child").classList.toggle("active");
    themeBtn.querySelector("span:last-child").classList.toggle("active");
});

// ---------- STEAR TIME ----------
const hours = document.getElementById("hours");
const minutes = document.getElementById("minutes");
const seconds = document.getElementById("seconds");
function updataClock() {
    let h = new Date().getHours();
    let m = new Date().getMinutes();
    let s = new Date().getSeconds();
    h = h < 10 ? "0" + h : h;
    m = m < 10 ? "0" + m : m;
    s = s < 10 ? "0" + s : s;
    hours.innerText = h;
    minutes.innerText = m;
    seconds.innerText = s;
    setTimeout(() => {
        updataClock();
    }, 1000);
}
updataClock();
// ---------- TIME END ----------

const TSLA_c = document.getElementById("TSLA-c");
const TSLA_dp = document.getElementById("TSLA-dp");
axios
    .get("https://finnhub.io/api/v1/quote?symbol=TSLA&token=ccls45aad3ibr9ofes20ccls45aad3ibr9ofes2g")
    .then(function (response) {
        let change = response.data.dp;
        change = String(change);
        if (change.includes("-") == false) {
            TSLA_dp.style.color = "red";
            TSLA_c.innerHTML = "$" + response.data.c;
            TSLA_dp.innerHTML = "+" + response.data.dp.toFixed(2) + "%";
        } else {
            TSLA_c.innerHTML = "$" + response.data.c;
            TSLA_dp.innerHTML = response.data.dp.toFixed(2) + "%";
        }
    });

const UL_c = document.getElementById("UL-c");
const UL_dp = document.getElementById("UL-dp");
axios
    .get("https://finnhub.io/api/v1/quote?symbol=UL&token=ccls45aad3ibr9ofes20ccls45aad3ibr9ofes2g")
    .then(function (response) {
        let change = response.data.dp;
        change = String(change);
        if (change.includes("-") == false) {
            UL_dp.style.color = "red";
            UL_c.innerHTML = "$" + response.data.c;
            UL_dp.innerHTML = "+" + response.data.dp.toFixed(2) + "%";
        } else {
            UL_c.innerHTML = "$" + response.data.c;
            UL_dp.innerHTML = response.data.dp.toFixed(2) + "%";
        }
    });

const MNST_c = document.getElementById("MNST-c");
const MNST_dp = document.getElementById("MNST-dp");
axios
    .get("https://finnhub.io/api/v1/quote?symbol=MNST&token=ccls45aad3ibr9ofes20ccls45aad3ibr9ofes2g")
    .then(function (response) {
        let change = response.data.dp;
        change = String(change);
        if (change.includes("-") == false) {
            MNST_dp.style.color = "red";
            MNST_c.innerHTML = "$" + response.data.c;
            MNST_dp.innerHTML = "+" + response.data.dp.toFixed(2) + "%";
        } else {
            MNST_c.innerHTML = "$" + response.data.c;
            MNST_dp.innerHTML = response.data.dp.toFixed(2) + "%";
        }
    });

const MCD_c = document.getElementById("MCD-c");
const MCD_dp = document.getElementById("MCD-dp");
axios
    .get("https://finnhub.io/api/v1/quote?symbol=MCD&token=ccls45aad3ibr9ofes20ccls45aad3ibr9ofes2g")
    .then(function (response) {
        let change = response.data.dp;
        change = String(change);
        if (change.includes("-") == false) {
            MCD_dp.style.color = "red";
            MCD_c.innerHTML = "$" + response.data.c;
            MCD_dp.innerHTML = "+" + response.data.dp.toFixed(2) + "%";
        } else {
            MCD_c.innerHTML = "$" + response.data.c;
            MCD_dp.innerHTML = response.data.dp.toFixed(2) + "%";
        }
    });
