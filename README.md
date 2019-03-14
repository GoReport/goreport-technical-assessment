# GoReport Technical Assessment

## Scenario

For this assessment you will need to produce a styled single webpage using **`PHP`**, **`HTML`** and **`CSS`** built according to the  **`Criteria`** section of this document.

## Setup

The prefared method to get set up for this assessment is to clone the `repo` into your working directory for serving **`.php`** files. and create a `git branch` to start your work however you can also request a `.zip` of the source files needed to complete this assessment.

_If you have requested a `.zip` then once this `.zip` has been extracted you will find 5 files, **`data.json,`** **`index.php`**,  **`functions.php`**, **`main.css`** and **`logo.png`**.png_

The **`index.php`** will have a basic HTML structure already set up.

Using any text editor or IDE of your choosing open both the **`index.php`** and **`main.css`** files to get started.

## Criteria

The criteria for this assessment is to load in the **data.json** file and manipulate this to create and populate a single webpage containing the following:

- **`Header with company logo`**
  - You will need to create a header of 130px in height with a grey bottom border and add the provided logo. This logo needs to be 100px H x 80px W in size and be placed on the top right hand side 20px from the right, 20px from the top.
- **`Footer`**
  - You will need to create a footer of 100px in height with a grey top border.
  - You will need to add a `<p>` with the sentence _Created by : [Your Name]_
  - You will need to add a `<p>` with the current date in the format _[day month year]_ for example `14th March 2019`
- **`<h1>`**
  - This `heading` needs to be 32pt font and **`#159a49`** in colour
  - The title for this heading can be found in the **`data.json`** file
- **`<h3>`**
  - This `sub heading` needs to be 18pt font and black in color.
  - The title for this sub heading can be found in the **`data.json`** file
- **`<p>`**
  - The body text should be 12pt font and justified
  - The text for this paragrapgh cannbe found in the **`data.json`** file
- **`Element Table`**
  - Using the data provided create a table that will display a unique list of **elements** with thier appearance count and aggregated cost
  - **Column1** - this column will be a unique list of grouped elements and should be named **`Element`**
  - **Column2** - this column will be a count of the grouped elements appearence in the data and should be named **`Element Count`**
  - **Column3** - this column will be a the total amount of each grouped elements **`(cost * qty)`** and displayed as a formatted number and should be called **`Total Cost`**
  - Add a row at the end of the table which will contain the **Total** for the Element Counts and a **Total** for the tables costs
- **`Repairs Table`**
  - Using the data provided create a table that will display a unique list of **repair types** with their appearance count and aggregated cost
cost
  - **Column1** - this column will be a unique list of grouped repair types and should be named **`Repair Type`**
  - **Column2** - this column will be a count of the grouped repair types appearence in the data and should be named **`Repair Type Count`**
  - **Column3** - this column will be a the total amount of each grouped repair types **`(cost * qty)`** and displayed as a formatted number and should be called **`Total Cost`**
  - Add a row at the end of the table which will contain the **Total** for the Repair Counts and a **Total** for the tables costs
- **`Table Styles`**
  - Tables should be 800px width
  - All table cells should have 5px padding and centered
  - Font size should be 12pt
  - There should be no cell borders.
  - The table header row should have a 3px solid bottom border and be **`#159a49`** in colour
  - Every data row should have a bottom border and be black
  - Every even row should have a background colour of **`#efefef`**
 - **Total Costs** should be bold
  - If any total cost is greater than 1000 then the colour should turn red.

**_If there is anything you could not get completed or anything that you would do differently then please put this in the description of the `pull request` of in the submission email._**

## Submission

The preferred method to submit this assessment is:
1. Create an **`index.html`** file and then view the source from the webpage and copy this into this **`.html`** file and save this to the working directory with the rest of the assessment files.
2. Create a `pull request` on `GitHub`.

_If you requested a `zip` file then to submit this assessment please take the following steps:_

1. Create an **`index.html`** file and then view the source from the webpage and copy this into this **`.html`** file.

2. Create a zip file containing your **`data.json`**, **`index.php`**, **`functions.php`**, **`index.html`**, **`main.css`**, **`logo.png`** and any additional files for example, included **`.php`** or supporting files.

3. Name this **`.zip`** file with your name and date, for example **`john_smith_01_01_19.zip`**.

4. Please email this **`.zip`** to [email]() with the subject **`Technical Test Submission`** and your name.
