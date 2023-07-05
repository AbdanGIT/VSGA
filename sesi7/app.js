let itemOrder = [
  {
    dipesan: false,
    nama: "Capuchino",
    harga: 35000,
  },
  {
    dipesan: false,
    nama: "Greenlatte",
    harga: 20000,
  },
  {
    dipesan: false,
    nama: "Teh Manis",
    harga: 7000,
  },
  {
    dipesan: false,
    nama: "Nasi Goreng",
    harga: 30000,
  },
  {
    dipesan: false,
    nama: "Nasi Padang",
    harga: 30000,
  },
];

let totalOrder = 0;

//mengambil elemen dari class item
const itemBeli = document.getElementsByClassName("item");
//mengambil elemen dari class last-item
const totalCetak = document.querySelector(".last-item");

for (let i = 0; i < itemBeli.length; i++) {
  itemBeli[i].addEventListener("click", function () {
    setItemBeli(i, itemBeli[i]);
  });
}

function setItemBeli(index, elemen) {
  if (itemOrder[index].dipesan == false) {
    itemOrder[index].dipesan = true;
    elemen.style.backgroundColor = "blue";
    totalOrder = totalOrder + itemOrder[index].harga;
  } else {
    itemOrder[index].dipesan = false;
    elemen.style.backgroundColor = "white";
    totalOrder = totalOrder - itemOrder[index].harga;
  }

  totalCetak.innerHTML = "Total <span>Rp " + totalOrder + ",-</span>";
}
