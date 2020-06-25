Файл [index.js](https://github.com/NikitaSH999/webportfolio/blob/master/Web/JS4/index.js)

Файл [module_export.js](https://github.com/NikitaSH999/webportfolio/blob/master/Web/JS4/module_export.js)

1. Установка webpack

![](https://github.com/NikitaSH999/webportfolio/blob/master/Web/JS4/img41.png)

2. Ошибка в связи с тем что не указан мод - production или development

![](https://github.com/NikitaSH999/webportfolio/blob/master/Web/JS4/img42.png)

3. Следующая ошибка появилась из-за того, что как я выяснил, файл index.js должен находится в проэкте по пути /src/index.js

![](https://github.com/NikitaSH999/webportfolio/blob/master/Web/JS4/img43.png)

4. После этого проэкт построился, однако в него решили импортироваться еще зависимости от node, поэтому файлик получился большой

![](https://github.com/NikitaSH999/webportfolio/blob/master/Web/JS4/img44.png)

5. Результирующий файл (вернее его кусок)

![](https://github.com/NikitaSH999/webportfolio/blob/master/Web/JS4/img45.png)
