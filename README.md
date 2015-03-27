Yii2 editable
=====================

Installation
------------

The preferred way to install this extension is through [composer](http://getcomposer.org/download/).

Either run

```
php composer.phar require --prefer-dist yii2mod/yii2-editable "*"
```

or add

```json
"yii2mod/yii2-editable": "*"
```

to the require section of your composer.json.


Usage Editable column
---------------------------------------
In your gridview columns section
```php
 [
    'class' => EditableColumn::className(),
    'attribute' => 'username',
    'url' => ['change-username'],
 ],
```
And add to your controller
```php
 public function actions()
      {
          return [
              'change-username' => [
                  'class' => EditableAction::className(),
                  'modelClass' => UserModel::className(),
                  'forceCreate' => false
              ]
          ];
      }
```
Usage Editable widget
---------------------------------

As a widget with a model

```php
\yii2mod\editable\Editable::widget( [
    'model' => $model,
    'attribute' => 'firstName',
    'url' => '/profile/update'
]);
```

With ActiveForm

```php
echo $form->field($model, "firstName")->widget(\yii2mod\editable\Editable::className(), [
    'url' => '/profile/update',
    'mode' => 'popup'
]);

```
