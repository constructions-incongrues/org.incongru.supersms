# Install
```bash
curl -s http://getcomposer.org/installer | php
./composer.phar install --prefer-dist
```

# Deploy
```bash
ant deploy -Dprofile=jeroboam
```

# Cookbook
## List available services
```
?name=help
```

## Obtain help for a service
```
?name=help&body=<service>
```

## Call a service
```
?name=<service>&body=<body>
```

## Debug mode
add ```&debug``` to query string
