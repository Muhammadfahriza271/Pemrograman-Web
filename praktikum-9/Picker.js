function pilih() {
  let list_hewan = document.getElementById('pilihan');
  let idx = list_hewan.selectedIndex;
  console.log('hewan index ke-' + idx + ' adalah' + list_hewan[idx].value);
  let area_gambar = document.getElementById('hewan');
  if (idx == 0) {
    area_gambar.src = 'img_hewan/' + list_hewan[idx].value + '.svg';
  } else {
    area_gambar.src = 'img_hewan/' + list_hewan[idx].value + '.jpg';
  }
}

// if (idx == 0) {
//   area_gambar.src = 'gambar/' + list_hewan[idx].value + '.svg';
// } else {
//   area_gambar.src = 'gambar/' + list_hewan[idx].value + '.jpg';
// }
// }
