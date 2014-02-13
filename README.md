# Install
```bash
curl -s http://getcomposer.org/installer | php
./composer.phar install --prefer-dist
```

# Deploy
## Automatic
Every commit to master is automatically deployed to http://supersms.incongru.org using Travis : https://travis-ci.org/constructions-incongrues/org.incongru.supersms

## Manual
```bash
ant deploy -Dprofile=jeroboam
```

# Cookbook
## List available services
```
?name=help
```

## Obtain help for a service
```
?name=help&body=<service>
```

## Call a service
```
?name=<service>&body=<body>
```

## Debug mode
add ```&debug``` to query string
