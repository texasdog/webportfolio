//Выполнил имко Никита
// Ссылка на работу в kodaror.ru https://kodaktor.ru/task_func_46f97
   function rgb(r = 255, g = 255, b = 255) 
  {
     return `rgb(${r},${g},${b})`;
  }
   document.querySelector('button')
   .addEventListener(
     'click',
      e => {
        const result = rgb(148,0,211);
        e.target.textContent = result;
    document.body.style.backgroundColor = result;
      }
   );
