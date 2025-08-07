# my-test-app2

Простий REST API на базі Yii2 з керуванням користувачами.

## Запуск

1. Встановіть залежності:
   ```
   composer install
   ```
2. Запустіть середовище:
   ```
   docker-compose up --build
   ```
   API буде доступне на http://localhost:8080

## Міграції

Для створення таблиці користувачів:
```
docker-compose run --rm php php vendor/bin/yii migrate
```

## Ліцензія

Вкажіть вашу ліцензію тут.
