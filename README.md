# Install
```bash
curl -s http://getcomposer.org/installer | php
./composer.phar install --prefer-dist
```

# Deploy
## Automatic
Every commit to master is automatically deployed to http://supersms.incongru.org using Travis : https://travis-ci.org/constructions-incongrues/org.incongru.supersms

## Manual
```bash
ant deploy -Dprofile=jeroboam
```

# Cookbook
## List available services
```
?service=help
```

## Obtain help for a service
```
?service=help&parameters=<service>
```

## Call a service
```
?service=<service>&parameters=<parameters>
```

## Debug mode
add ```&debug``` to query string
