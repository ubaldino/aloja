<?php

$ERRORS = [

   '0' => 'ok' ,
   '1' => 'compile error' ,
   '2' => 'runtime error' ,
   '3' => 'timelimit exceeded' ,
   '4' => 'internal error' ,
   '5' => 'parameter error' ,
   '6' => 'internal error' ,
   '7' => 'memory limit exceeded' ,
   '8' => 'security threat' ,
   '9' => 'runtime error' ,
    # other_codes are unknown to boca: in this case BOCA will present the
    #                           last line of standard output to the judge
   '43' => 'parameter problem' ,
   '44' => '$1 not found or it\'s not readable' ,
   '45' => '$2 not found (or is not in the current dir) or it\'s not readable' ,
   '46' => '$sf not found or it\'s not executable' ,
   '47' => 'Aborting because $1 is not statically linked'
];





$MATCHES = [
   '4' => 'Files match exactly' ,
   '5' => 'Files match with differences in the amount of white spaces' ,
   '6' => 'Differences found' ,

   '0' => 'ok' ,
   '1' => 'compile error' ,
   '2' => 'runtime error' ,
   '3' => 'timelimit exceeded' ,
   '7' => 'memory limit exceeded' ,
   '8' => 'security threat' ,
   '9' => 'runtime error' ,
    # other_codes are unknown to boca: in this case BOCA will present the
    #                           last line of standard output to the judge
   '43' => 'parameter problem' ,
];


/*
echo "Files match with differences in the amount of white spaces and blank lines"
exit 5

echo "Files match if we ignore case and differences in the amount of white spaces and blank lines"
exit 5

echo "Files match if we discard all white spaces"
exit 5

echo "Files match if we ignore case and discard all white spaces"
exit 5

echo "BUT Files match if we compare word by word, ignoring everything else, using wdiff"
echo "diff has a bug that, if a line contains a single space, this is not discarded by -w"
exit 5

echo -e "### files dont match - see output"
exit 6
*/


/*                   ||    FOR   COMPILER    |||                       */

# ////////////////////////////////////////////////////////////////////////////////
# //BOCA Online Contest Administrator
# //    Copyright (C) 2003-2012 by BOCA System (bocasystem@gmail.com)
# //
# //    This program is free software: you can redistribute it and/or modify
# //    it under the terms of the GNU General Public License as published by
# //    the Free Software Foundation, either version 3 of the License, or
# //    (at your option) any later version.
# //
# //    This program is distributed in the hope that it will be useful,
# //    but WITHOUT ANY WARRANTY; without even the implied warranty of
# //    MERCHANTABILITY or FITNESS FOR A PARTICULAR PURPOSE.  See the
# //    GNU General Public License for more details.
# //    You should have received a copy of the GNU General Public License
# //    along with this program.  If not, see <http://www.gnu.org/licenses/>.
# ////////////////////////////////////////////////////////////////////////////////
#Last modified: 21/july/2012 by cassio@ime.usp.br
#
# parameters are:
# $1 source_file
# $2 exe_file (default run.exe)
# $3 timelimit (optional, limit to run all the repetitions, by default only one repetition)
# $4 maximum allowed memory (in MBytes, default 512M)
#
# the output of the submission should be directed to the standard output
#
# the return code show what happened (according to safeexec):
# 0 ok
# 1 compile error
# 2 runtime error
# 3 timelimit exceeded
# 4 internal error
# 5 parameter error
# 6 internal error
# 7 memory limit exceeded
# 8 security threat
# 9 runtime error
# other_codes are unknown to boca: in this case BOCA will present the
#                                  last line of standard output to the judge




/*                   ||    FOR   RUN BINARY    |||                       */


#!/bin/bash
# ////////////////////////////////////////////////////////////////////////////////
# //BOCA Online Contest Administrator
# //    Copyright (C) 2003-2012 by BOCA System (bocasystem@gmail.com)
# //
# //    This program is free software: you can redistribute it and/or modify
# //    it under the terms of the GNU General Public License as published by
# //    the Free Software Foundation, either version 3 of the License, or
# //    (at your option) any later version.
# //
# //    This program is distributed in the hope that it will be useful,
# //    but WITHOUT ANY WARRANTY; without even the implied warranty of
# //    MERCHANTABILITY or FITNESS FOR A PARTICULAR PURPOSE.  See the
# //    GNU General Public License for more details.
# //    You should have received a copy of the GNU General Public License
# //    along with this program.  If not, see <http://www.gnu.org/licenses/>.
# ////////////////////////////////////////////////////////////////////////////////
#Last modified: 22/aug/2012 by cassio@ime.usp.br
#
# parameters are:
# $1 exe_file
# $2 input_file
# $3 timelimit (limit to run all the repetitions, by default only one repetition)
# $4 number_of_repetitions_to_run (optional, can be used for better tuning the timelimit)
# $5 maximum allowed memory (in MBytes)
# $6 maximum allowed output size (in KBytes)
#
# the output of the submission should be directed to the standard output
#
# the return code show what happened (according to safeexec):
# 0 ok
# 1 compile error
# 2 runtime error
# 3 timelimit exceeded
# 4 internal error
# 5 parameter error
# 6 internal error
# 7 memory limit exceeded
# 8 security threat
# 9 runtime error
# other_codes are unknown to boca: in this case BOCA will present the
#                                  last line of standard output to the judge



