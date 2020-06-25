# Задание и теория

[Строки и массивы](http://kodaktor.ru/strings_arrays2018.pdf)

# Решение

[Ссылка на решение](https://kodaktor.ru/?!=71aec26_8b43c)

код решения:


## Задачи со строками

    //Упражнение 6-1
    Out.log('6-1: ' + String.fromCharCode(0x0F00));

    //Упражнение 6-2
    Out.log('6-2: ' + Number('10').toString(16).toUpperCase());

    //Упражнение 6-3
    Out.log('6-3: ' + parseInt('0x000A'));

 ## Задачи с массивами
    let arr = [[1, 3, 5], [2, 4, 6]];
    [[,,],[,even2,]] = arr; 
     Out.log('arrform: ' + even2);

    //Упражнение 6-4
    let nums = Array.from({length: 10}, (x, y) => Math.ceil(Math.random()*1000));
    nums.sort((x, y) => x - y);
    Out.log('6-4: ' + nums);

    //Упражнение 6-5a	
    let array = [1, 2, 3];
    let summer = (a, b, c) => a + b + c;
    Out.log('6-5a: ' + summer(...array));
    //Out.log('6-5a: ' + summer.apply(null, [1,2,3]));
    //Out.log('6-5a: ' + Reflect.apply(summer, null, [1,2,3]));

    //Упражнение 6-5б
    //Out.log('6-5б: ' + Math.max(...nums));
    Array.prototype.max = function() {return Math.max(...this);};
    Out.log('6-5б: ' + nums.max());

    //Упражнение 6-6
    let ips = [];
    fetch('https://kodaktor.ru/j/ips')
       .then(x => x.json())
       .then(x => ar = x)
       .catch(x => Out.log('Ошибка получения массива'));
    for(let i in ar) ips[i] = ar[i].ip;
    let counts = [];
    for(let i in ips){
      let ip = ips[i];
      let c = 1;
      for(let j = i+1; j < ips.length; ++j){
        if (ips[j] === ip) {
          ++c;
          ips.splice(j, 1);
          j-=2;
        };
      };
      counts[i] = c;
    }; 
    Out.log('6-6: Число уникальных элементов - ' + counts.length);
    
 	for(i = 0; i < ips.length; i++){
   	 Out.log(`${i}) ${ips[i]} count: ${counts[i]}`);
	}; 

	//${ - без этой строки кодактор портит цвет нижнего кода

	//Упражнение 6-7
	let sum = (...args) => args.reduce((x, y) => x + y);
	Out.log('6-7: ' + sum(1,2,3));

	//Упражнение 6-8
	let getArray = n => Array.from({length: n}, (x, y) => y+65);
	Out.log('6-8: ' + getArray(6));

	//Упражнение 6-9
	let alphabet = getArray(10);
	Out.log('6-9: ' + String.fromCharCode(...alphabet));
	let str = String.fromCharCode(...alphabet);
	
	//Упражнение 6-10a
	Out.log('6-10a: ' + str.split('').map(x => x.charCodeAt()));
	
	//Упражнение 6-10б
    	let a = Array.from({length: 10}, (x, y) => String(Math.ceil(Math.random()*(9999999 - 99) + 99)).padStart(10, '0'));
	Out.log('6-10б: ' + a);

	//Упражнение 6-11
	let mas = n => Array.from({length: n}, (x, y) => ++y);
	Out.log('6-11: ' + mas(5));
