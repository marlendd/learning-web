function send(family, radio1, radio2, radio3) {
    let markProg = parseInt(radio1.value);
    let markMath = parseInt(radio2.value);
    let markPhyz = parseInt(radio3.value);
  
    let rating = (markProg + markMath + markPhyz) / 3;
  
    document.write("<h2>Фамилия: " + family.value + "</h2>");
    document.write("<h2>Оценка по дисциплине «Программирование»: " + markProg + "</h2>");
    document.write("<h2>Оценка по дисциплине «Математика»: " + markMath + "</h2>");
    document.write("<h2>Оценка по дисциплине «Физика»: " + markPhyz + "</h2>");
    document.write("<h2>Средний рейтинг: " + rating.toFixed(2) + "</h2>");
  }
  