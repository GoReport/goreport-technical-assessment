# GoReport Technical Assessment
## PrinceXML Output

In GoReport every report that one of our customers uses is built on a template which details what information they wish to capture. For each template they can specify the styling of the report when it is published. Things like colour schemes, logos and photo layout can be configured but also data manipulation and aggregation.

Our publishing system uses PHP (Laravel) and Less to create styled HTML outputs which are then fed into PrinceXML and output as a completed PDF. Your job in GoReport would be to create the PHP and Less pages to the customers specification.

This technical challenge provides an introduction to PrinceXML by providing you with HTML and CSS which must be amended to produce the desired output which has been detailed in [this PDF](https://github.com/GoReport/goreport-technical-assessment/blob/5f7b5492e6144fad8b2b4cb537f25beb85614603/Building%20Survey.pdf). The aim is for this task to take no longer than 1-2 hrs. If after 2 hrs you have not completed the task please submit your completed work along with explanation of what other tasks you did not have time to complete.

## Scenario

Using the PrinceXML test system (link below), please produce a PDF which as closely as possible matches the provided output. This repo includes an [HTML](https://github.com/GoReport/goreport-technical-assessment/blob/c7e7523755c6527e94edf739a4ebad56a38cc953/index.html) and [CSS](https://github.com/GoReport/goreport-technical-assessment/blob/c7e7523755c6527e94edf739a4ebad56a38cc953/main.css) file which can be uploaded to the PrinceXML site and used to generate a PDF.

### PrinceXML

The PrinceXML site can be found [here](https://www.princexml.com/) the documentation [here](https://www.princexml.com/doc/intro-userguide/) and the test system [here](https://www.princexml.com/try/). Sadly the PrinceXML test system cannot detect that a file which has previously been uploaded has changed so you will either need to upload with different file names each time you make a change or refresh the page between tests.

It is possible to open the html file in a browser and style it without PrinceXML but some styling rules will only work when used by PrinceXML, a browser will ignore them. An example this is including forced [page breaks](https://www.princexml.com/doc/paged/#page-breaks).
## Assistance


If you have any issues with getting set up for the test you can ask any questions via email to tech-test@goreport.com.









## Setup

The preferred method to get set up for this assessment is to clone the `repo` into your working directory for serving **`.php`** files. and create a `git branch` to start your work however you can also download a `.zip` of the source files needed to complete this assessment.

_If you have downloaded the `.zip` then once this `.zip` has been extracted you will find 5 files, **`data.json,`** **`index.php`**,  **`functions.php`**, **`main.css`** and **`logo.png`**.png_

The **`index.php`** will have a basic HTML structure already set up.

Using any text editor or IDE of your choosing open both the **`index.php`** and **`main.css`** files to get started.

## Criteria

The criteria for this assessment is to load in the **data.json** file and manipulate this to create and populate a single web page containing the following:

- **`Header with company logo`**
  - You will need to create a header of 130px in height with a grey bottom border and add the provided logo. This logo needs to be 100px H x 80px W in size and be placed on the top right-hand side 20px from the right, 20px from the top.
- **`Footer`**
  - You will need to create a footer of 100px in height with a grey top border.
  - You will need to add a `<p>` with the sentence _Created by: [Your Name]_
  - You will need to add a `<p>` with the current date in the format _[day month year]_ for example `14th March 2019`
- **`<h1>`**
  - This `heading` needs to be 32pt font and **`#159a49`** in colour
  - The title for this heading can be found in the **`data.json`** file
- **`<h3>`**
  - This `sub heading` needs to be 18pt font and black in color.
  - The title for this sub heading can be found in the **`data.json`** file
- **`<p>`**
  - The body text should be 12pt font and justified
  - The text for this paragraph can be found in the **`data.json`** file
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
1. Create an **`index.html`** file and then view the source from the web page and copy this into this **`.html`** file and save this to the working directory with the rest of the assessment files.
2. Create a `pull request` on `GitHub`.

_If you downloaded the `zip` file then to submit this assessment please take the following steps:_

1. Create an **`index.html`** file and then view the source from the web page and copy this into this **`.html`** file.

2. Create a zip file containing your **`data.json`**, **`index.php`**, **`functions.php`**, **`index.html`**, **`main.css`**, **`logo.png`** and any additional files for example, included **`.php`** or supporting files.

3. Name this **`.zip`** file with your name and date, for example **`john_smith_01_01_19.zip`**.

4. Please email this **`.zip`** to [dev@goreport.com](dev@goreport.com) with the subject **`Technical Test Submission`** and your name.
