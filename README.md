# Проект для изучения PHPUnit тестов

## Использование

```sh
# Заходим в контейнер
$ dc exec home.testing.fpm bash

# Просмотр текущей версии библиотеки
$ ./vendor/bin/phpunit --version

# Запуск тестов в обычном режиме
$ ./vendor/bin/phpunit tests

# Запуск тестов в режиме документации
$ ./vendor/bin/phpunit tests --testdox
```

## Статья по которой создаем тесты 
### и прогоняем их в локальной среде

Модульное тестирование (Unit tests) с помощью PHPUnit
[[Ссылка на статью](https://www.kobzarev.com/programming/phpunit/)]