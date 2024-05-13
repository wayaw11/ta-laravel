setInterval(() => {
  if (
    (sessionStorage.getItem("order") == "|") |
    (sessionStorage.getItem("order") == null) |
    (sessionStorage.getItem("order") == "")
  ) {
    $("#payment").addClass("d-none");
    sessionStorage.removeItem("order");
  } else {
    $("#payment").removeClass("d-none");
  }
}, 50);

let order = [
  "Roti Bakar",
  "Kentang Goreng",
  "Pisang Goreng",
  "Tempe Mendoan",
  "Nasi Ayam Bakar",
  "Cappucino",
  "Chocolate",
  "Kopi Hitam",
];
function removeDuplicates(arr) {
  return arr.filter((item, index) => arr.indexOf(item) === index);
}
function aos(way) {
  return $("." + way).attr("data-aos", "fade-" + way);
}

let nominal = $(".rp").html();
let price = [5000, 8000, 10000, 8000, 15000, 5000, 5000, 3000];
function buy(id) {
  let timerInterval;
  Swal.fire({
    title: "Berhasil!",
    icon: "success",
    html: `<span class="fw-bold">${order[id - 1]}</span> berhasil ditambahkan!`,
    showConfirmButton: false,
    timer: 1000,
    willClose: () => {
      clearInterval(timerInterval);
    },
  });
  // save to session storage
  let old = sessionStorage.getItem("order");
  let list = [];
  if (old == null) {
    list.push(id - 1);
    list.sort();
    let string = list.join("|");
    sessionStorage.setItem("order", string);
  } else {
    list = old.split("|");
    list.push(id - 1);
    list.sort();
    let string = list.join("|");
    sessionStorage.setItem("order", string);
  }
}
aos("up");
aos("right");
aos("left");
aos("in");

AOS.init({
  disable: "phone",
  duration: 700,
  easing: "ease",
  once: false,
  delay: 100,
});

function rupiah(rp) {
  return "Rp " + rp.toLocaleString("id-ID");
}

function cart() {
  let list = sessionStorage.getItem("order").split("|");

  let tr = [];

  cart = removeDuplicates(list).sort();
  cart.forEach((e, i) => {
    const counts = {};
    for (const num of list) {
      counts[num] = counts[num] ? counts[num] + 1 : 1;
    }
    tr.push(`     <tr id="${e}">
                        <th
                          scope="row"
                          class="align-content-center"
                          style="width: 5%">
                          ${i + 1}
                        </th>
                        <td style="width: 20%">
                          <img
                            src="../assets/img/produk${parseInt(e) + 1}.jpg"
                            width="90px"
                            style="max-height: 7rem; object-fit: cover"
                            class="img-fluid rounded-2 shadow-lg"
                            alt="" />
                        </td>
                        <td class="align-content-center text-start" width="30%">${
                          order[e]
                        }</td>
                        <td class="align-content-center">
                          <span class="rp">${counts[e]}</span>
                        </td>
                        <td class="align-content-center text-end pe-5 text-decoration-underline">
                          <span class="rp">${rupiah(
                            price[e] * counts[e]
                          )}</span>
                        </td>
                        <td style="width: 6%" class="align-content-center">
                          <button
                            onclick="del(${e})"
                            class="btn btn-primary">
                            <i class="fa-solid fa-trash-can"></i>
                          </button>
                        </td>
                      </tr>`);
  });
  let qty = list.length;
  let total = 0;
  list.forEach((e, i) => {
    total += parseInt(price[e]);
  });
  $("#cart").html(tr);
  $("#qty").html(qty);
  $("#total").html(rupiah(total));
}

function del(id) {
  function cart() {
    let list = sessionStorage.getItem("order").split("|");

    let tr = [];

    cart = removeDuplicates(list).sort();
    cart.forEach((e, i) => {
      const counts = {};
      for (const num of list) {
        counts[num] = counts[num] ? counts[num] + 1 : 1;
      }
      tr.push(`     <tr id="${e}">
                        <th
                          scope="row"
                          class="align-content-center"
                          style="width: 5%">
                          ${i + 1}
                        </th>
                        <td style="width: 20%">
                          <img
                            src="../assets/img/produk${parseInt(e) + 1}.jpg"
                            width="90px"
                            style="max-height: 7rem; object-fit: cover"
                            class="img-fluid rounded-2 shadow-lg"
                            alt="" />
                        </td>
                        <td class="align-content-center text-start" width="30%">${
                          order[e]
                        }</td>
                        <td class="align-content-center">
                          <span class="rp">${counts[e]}</span>
                        </td>
                        <td class="align-content-center text-end pe-5 text-decoration-underline">
                          <span class="rp">${rupiah(
                            price[e] * counts[e]
                          )}</span>
                        </td>
                        <td style="width: 6%" class="align-content-center">
                          <button
                            onclick="del(${e})"
                            class="btn btn-primary">
                            <i class="fa-solid fa-trash-can"></i>
                          </button>
                        </td>
                      </tr>`);
    });
    let qty = list.length;
    let total = 0;
    list.forEach((e, i) => {
      total += parseInt(price[e]);
    });
    $("#cart").html(tr);
    $("#qty").html(qty);
    $("#total").html(rupiah(total));
  }
  $("#" + id).remove();
  let list = sessionStorage.getItem("order").split("|");
  const counts = {};
  for (const num of list) {
    counts[num] = counts[num] ? counts[num] + 1 : 1;
  }
  let i = list.indexOf("" + id + "");
  list.splice(i, Object.values(counts)[i]);
  sessionStorage.setItem("order", list.join("|"));
  cart();
  if (
    (sessionStorage.getItem("order") == null) |
    (sessionStorage.getItem("order") == "")
  ) {
    sessionStorage.removeItem("order");
    window.location.href = "menu.html";
  }
}
