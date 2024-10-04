# lowercasecustomeremails

## Overview

Make sure customer emails are always lower case!

## Installation

### Backoffice Upload
1. Download the module package.
2. Go to the PrestaShop admin panel.
3. Navigate to `Modules` > `Module Manager`.
4. Click on `Upload a module` and select the downloaded package.
5. Install the module.

### Git Submodule
1. Navigate to your PrestaShop project's root directory.
2. Add the Lower Case Customer Emails module as a submodule: `git submodule add https://github.com/blauwfruit/lowercasecustomeremails modules/lowercasecustomeremails`
3. When you wanna pull in the latest version run `git submodule update --init --recursive`

## Usage
1. Navigate to the Lower Case Customer Emails module configuration page `Catalog` > `Lower Case Customer Emails`
2. Click on add new
3. Ensure that each Lower Case Customer Emails entry is filled with relevant question and answer content and pick a page by searching
4. Hit the save button

## Docker

For development or demo purposes you can run Docker to test this integration.

For the latest PrestaShop:
```bash
gh repo clone blauwfruit/lowercasecustomeremails .
docker compose up
```

For other version

```bash
gh repo clone blauwfruit/lowercasecustomeremails .
docker compose down --volumes && export TAG=8.1.7-8.1-apache && docker compose up
```