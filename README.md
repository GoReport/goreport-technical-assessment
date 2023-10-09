# GoReport Technical Assessment
## PrinceXML Output

In GoReport every report that one of our customers creates is built on a template which details what information they wish to capture. For each template they can specify the styling of the report when it is published. Things like colour schemes, logos and photo layout can be configured but also data manipulation and aggregation.

Our publishing system uses PHP (Laravel) and Less to create styled HTML outputs which are then fed into PrinceXML and output as a completed PDF. Your job in GoReport would be to create the PHP and Less pages to the customers specification.

This technical challenge provides an introduction to PrinceXML by providing you with HTML and CSS which must be amended to produce the desired output which has been detailed in [this PDF](https://github.com/GoReport/goreport-technical-assessment/blob/5f7b5492e6144fad8b2b4cb537f25beb85614603/Building%20Survey.pdf). The aim is for this task to take no longer than 1-2 hrs. If after 2 hrs you have not completed the task please submit your completed work along with explanation of what other tasks you did not have time to complete.

## Scenario

Using the PrinceXML test system (link below), please produce a PDF which as closely as possible matches the provided output. This repo includes an [HTML](https://github.com/GoReport/goreport-technical-assessment/blob/c7e7523755c6527e94edf739a4ebad56a38cc953/index.html) and [CSS](https://github.com/GoReport/goreport-technical-assessment/blob/c7e7523755c6527e94edf739a4ebad56a38cc953/main.css) file which can be uploaded to the PrinceXML site and used to generate a PDF.

### Colours

- Body Text = #000000
- Headings = #2e74b5
- Headers and Footers = #808080

### Fonts

- You do not need to match the specific fonts used in the sample document, any Sans Serif font is fine.

### Special attention should be given to
- Heading numbering
- Table of Content Linking
- Photo layout
- Page headers and footers
- Forced page breaks

## PrinceXML

The PrinceXML site can be found [here](https://www.princexml.com/) the documentation [here](https://www.princexml.com/doc/intro-userguide/) and the test system [here](https://www.princexml.com/try/). Sadly the PrinceXML test system cannot detect that a file which has previously been uploaded has changed so you will need to upload with different file names each time you make a change, refresh the page between tests or copy and paste from your file into the text area.

It is possible to open the html file in a browser and style it without PrinceXML but some styling rules will only work when used by PrinceXML, a browser will ignore them. An example this is including forced [page breaks](https://www.princexml.com/doc/paged/#page-breaks).

## Assistance


If you have any issues with getting set up for the test you can ask any questions via email to dev@goreport.com. We will also allow all applicants the opportunity to ask **one** question about any area of the test they are struggling with, this question can also be directed to dev@goreport.com.
## Submission

The preferred method to submit this assessment is:
1. Compress into a single zip, your index.html, main.css and a published PDF.

2. Name this **`.zip`** file with your name and date, for example **`john_smith_01_01_19.zip`**.

3. Please email this **`.zip`** to [dev@goreport.com](dev@goreport.com) with the subject **`Technical Test Submission`** and your name.
