# Userguide test setup

Welcome! This is the test repo for the Userguides project.

## Approach 1 - as a PageType

When you run `dev/build` you will see a `DocumentationPage` generated. This looks for
`_index.md` and `introduction.md` and renders those in the CMS, and also on the frontend
for logged-in users. 

The files associated with that approach are:

- DocumentationPage
- DocumentationPageController
- documentationpage.yml
- DocumentationPage.ss

## Approach 2a - as a LeftAndMain section

To prep, run `dev/tasks/GenerateUserGuides` to generate the UserGuide objects

You'll see a LeftAndMain tab called UserGuides populate that renders a Gridfield, which
in turn renders the markdown.

## Approach 2b - as an in-context Tab

To prep, run `dev/tasks/GenerateUserGuides` to generate the UserGuide objects

Two (`Page.md` and `SecondPage.md`) have a syntax block `@UserDocs_Class_Name=Page` which
pins them to the `Page` class - so you can open any `Page` (say, Home) and you'll see a
tab called User Guide - navigate there to see a Gridfield listing all the files that
match the class. Click one to load it in the CMS Preview window.

The files associated with these two approaches are in the module, i.e. in 
`vendor/silverstripe/userguide`
