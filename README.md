# Dependency Manager

[![Latest Stable Version](https://poser.pugx.org/cti/di/v/stable.png)](https://packagist.org/packages/cti/di)
[![Total Downloads](https://poser.pugx.org/cti/di/downloads.png)](https://packagist.org/packages/cti/di)
[![License](https://poser.pugx.org/cti/di/license.png)](https://packagist.org/packages/cti/di)
[![Build Status](https://travis-ci.org/cti/di.svg)](https://travis-ci.org/cti/di)
[![Coverage Status](https://coveralls.io/repos/cti/di/badge.png)](https://coveralls.io/r/cti/di)

This component implements dependency injection pattern.   
Manager can inject properties, configure objects and resolve depenencies while calling methods.  

# Installation
Using composer.
```json
{
    "require": {
        "cti/di": "*"    
    }
}
```

# Components

* Configuration used by Manager while create an instance
* Manager creates instance injecting all dependencies
* Service locator works on top of Manager

See the `doc` directory for more detailed documentation.