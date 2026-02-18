function show_information2(elem) {
    let x = parseFloat(elem.value);
  
    if (!isNaN(x) && x >= 3.00 && x <= 5.00) {
      alert("Ваш средний балл – " + elem.value + " балла");
    } else {
      alert("Нет данных!");
    }
  }
  