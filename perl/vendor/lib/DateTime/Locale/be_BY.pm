###########################################################################
#
# This file is auto-generated by the Perl DateTime Suite locale
# generator (0.05).  This code generator comes with the
# DateTime::Locale distribution in the tools/ directory, and is called
# generate-from-cldr.
#
# This file as generated from the CLDR XML locale data.  See the
# LICENSE.cldr file included in this distribution for license details.
#
# This file was generated from the source file be_BY.xml
# The source file version number was 1.47, generated on
# 2009/05/05 23:06:34.
#
# Do not edit this file directly.
#
###########################################################################

package DateTime::Locale::be_BY;

use strict;
use warnings;
use utf8;

use base 'DateTime::Locale::be';

sub cldr_version { return "1\.7\.1" }

{
    my $first_day_of_week = "1";
    sub first_day_of_week { return $first_day_of_week }
}

{
    my $glibc_date_format = "\%d\.\%m\.\%Y";
    sub glibc_date_format { return $glibc_date_format }
}

{
    my $glibc_date_1_format = "\%a\ \%b\ \%e\ \%H\:\%M\:\%S\ \%Z\ \%Y";
    sub glibc_date_1_format { return $glibc_date_1_format }
}

{
    my $glibc_datetime_format = "\%a\ \%d\ \%b\ \%Y\ \%T";
    sub glibc_datetime_format { return $glibc_datetime_format }
}

{
    my $glibc_time_format = "\%T";
    sub glibc_time_format { return $glibc_time_format }
}

1;

__END__


=pod

=encoding utf8

=head1 NAME

DateTime::Locale::be_BY

=head1 SYNOPSIS

  use DateTime;

  my $dt = DateTime->now( locale => 'be_BY' );
  print $dt->month_name();

=head1 DESCRIPTION

This is the DateTime locale package for Belarusian Belarus.

=head1 DATA

This locale inherits from the L<DateTime::Locale::be> locale.

It contains the following data.

=head2 Days

=head3 Wide (format)

  панядзелак
  аўторак
  серада
  чацвер
  пятніца
  субота
  нядзеля

=head3 Abbreviated (format)

  пн
  аў
  ср
  чц
  пт
  сб
  нд

=head3 Narrow (format)

  п
  а
  с
  ч
  п
  с
  н

=head3 Wide (stand-alone)

  панядзелак
  аўторак
  серада
  чацвер
  пятніца
  субота
  нядзеля

=head3 Abbreviated (stand-alone)

  пн
  аў
  ср
  чц
  пт
  сб
  нд

=head3 Narrow (stand-alone)

  п
  а
  с
  ч
  п
  с
  н

=head2 Months

=head3 Wide (format)

  студзень
  люты
  сакавік
  красавік
  май
  чэрвень
  ліпень
  жнівень
  верасень
  кастрычнік
  лістапад
  снежань

=head3 Abbreviated (format)

  сту
  лют
  сак
  кра
  май
  чэр
  ліп
  жні
  вер
  кас
  ліс
  сне

=head3 Narrow (format)

  с
  л
  с
  к
  м
  ч
  л
  ж
  в
  к
  л
  с

=head3 Wide (stand-alone)

  студзень
  люты
  сакавік
  красавік
  май
  чэрвень
  ліпень
  жнівень
  верасень
  кастрычнік
  лістапад
  снежань

=head3 Abbreviated (stand-alone)

  сту
  лют
  сак
  кра
  май
  чэр
  ліп
  жні
  вер
  кас
  ліс
  сне

=head3 Narrow (stand-alone)

  с
  л
  с
  к
  м
  ч
  л
  ж
  в
  к
  л
  с

=head2 Quarters

=head3 Wide (format)

  1-шы квартал
  2-гі квартал
  3-ці квартал
  4-ты квартал

=head3 Abbreviated (format)

  1-шы кв.
  2-гі кв.
  3-ці кв.
  4-ты кв.

=head3 Narrow (format)

  1
  2
  3
  4

=head3 Wide (stand-alone)

  1-шы квартал
  2-гі квартал
  3-ці квартал
  4-ты квартал

=head3 Abbreviated (stand-alone)

  1-шы кв.
  2-гі кв.
  3-ці кв.
  4-ты кв.

=head3 Narrow (stand-alone)

  1
  2
  3
  4

=head2 Eras

=head3 Wide

  да н.э.
  н.э.

=head3 Abbreviated

  да н.е.
  н.е.

=head3 Narrow

  да н.э.
  н.э.

=head2 Date Formats

=head3 Full

   2008-02-05T18:30:30 = аўторак, 5 люты 2008
   1995-12-22T09:05:02 = пятніца, 22 снежань 1995
  -0010-09-15T04:44:23 = субота, 15 верасень -10

=head3 Long

   2008-02-05T18:30:30 = 5 люты 2008
   1995-12-22T09:05:02 = 22 снежань 1995
  -0010-09-15T04:44:23 = 15 верасень -10

=head3 Medium

   2008-02-05T18:30:30 = 5.2.2008
   1995-12-22T09:05:02 = 22.12.1995
  -0010-09-15T04:44:23 = 15.9.-010

=head3 Short

   2008-02-05T18:30:30 = 5.2.08
   1995-12-22T09:05:02 = 22.12.95
  -0010-09-15T04:44:23 = 15.9.-10

=head3 Default

   2008-02-05T18:30:30 = 5.2.2008
   1995-12-22T09:05:02 = 22.12.1995
  -0010-09-15T04:44:23 = 15.9.-010

=head2 Time Formats

=head3 Full

   2008-02-05T18:30:30 = 18.30.30 UTC
   1995-12-22T09:05:02 = 09.05.02 UTC
  -0010-09-15T04:44:23 = 04.44.23 UTC

=head3 Long

   2008-02-05T18:30:30 = 18.30.30 UTC
   1995-12-22T09:05:02 = 09.05.02 UTC
  -0010-09-15T04:44:23 = 04.44.23 UTC

=head3 Medium

   2008-02-05T18:30:30 = 18.30.30
   1995-12-22T09:05:02 = 09.05.02
  -0010-09-15T04:44:23 = 04.44.23

=head3 Short

   2008-02-05T18:30:30 = 18.30
   1995-12-22T09:05:02 = 09.05
  -0010-09-15T04:44:23 = 04.44

=head3 Default

   2008-02-05T18:30:30 = 18.30.30
   1995-12-22T09:05:02 = 09.05.02
  -0010-09-15T04:44:23 = 04.44.23

=head2 Datetime Formats

=head3 Full

   2008-02-05T18:30:30 = аўторак, 5 люты 2008 18.30.30 UTC
   1995-12-22T09:05:02 = пятніца, 22 снежань 1995 09.05.02 UTC
  -0010-09-15T04:44:23 = субота, 15 верасень -10 04.44.23 UTC

=head3 Long

   2008-02-05T18:30:30 = 5 люты 2008 18.30.30 UTC
   1995-12-22T09:05:02 = 22 снежань 1995 09.05.02 UTC
  -0010-09-15T04:44:23 = 15 верасень -10 04.44.23 UTC

=head3 Medium

   2008-02-05T18:30:30 = 5.2.2008 18.30.30
   1995-12-22T09:05:02 = 22.12.1995 09.05.02
  -0010-09-15T04:44:23 = 15.9.-010 04.44.23

=head3 Short

   2008-02-05T18:30:30 = 5.2.08 18.30
   1995-12-22T09:05:02 = 22.12.95 09.05
  -0010-09-15T04:44:23 = 15.9.-10 04.44

=head3 Default

   2008-02-05T18:30:30 = 5.2.2008 18.30.30
   1995-12-22T09:05:02 = 22.12.1995 09.05.02
  -0010-09-15T04:44:23 = 15.9.-010 04.44.23

=head2 Available Formats

=head3 d (d)

   2008-02-05T18:30:30 = 5
   1995-12-22T09:05:02 = 22
  -0010-09-15T04:44:23 = 15

=head3 EEEd (d EEE)

   2008-02-05T18:30:30 = 5 аў
   1995-12-22T09:05:02 = 22 пт
  -0010-09-15T04:44:23 = 15 сб

=head3 Hm (H.mm)

   2008-02-05T18:30:30 = 18.30
   1995-12-22T09:05:02 = 9.05
  -0010-09-15T04:44:23 = 4.44

=head3 hm (h.mm a)

   2008-02-05T18:30:30 = 6.30 пасля палудня
   1995-12-22T09:05:02 = 9.05 да палудня
  -0010-09-15T04:44:23 = 4.44 да палудня

=head3 Hms (H.mm.ss)

   2008-02-05T18:30:30 = 18.30.30
   1995-12-22T09:05:02 = 9.05.02
  -0010-09-15T04:44:23 = 4.44.23

=head3 hms (h.mm.ss a)

   2008-02-05T18:30:30 = 6.30.30 пасля палудня
   1995-12-22T09:05:02 = 9.05.02 да палудня
  -0010-09-15T04:44:23 = 4.44.23 да палудня

=head3 M (L)

   2008-02-05T18:30:30 = 2
   1995-12-22T09:05:02 = 12
  -0010-09-15T04:44:23 = 9

=head3 Md (d.M)

   2008-02-05T18:30:30 = 5.2
   1995-12-22T09:05:02 = 22.12
  -0010-09-15T04:44:23 = 15.9

=head3 MEd (E, d MMM)

   2008-02-05T18:30:30 = аў, 5 лют
   1995-12-22T09:05:02 = пт, 22 сне
  -0010-09-15T04:44:23 = сб, 15 вер

=head3 MMM (LLL)

   2008-02-05T18:30:30 = лют
   1995-12-22T09:05:02 = сне
  -0010-09-15T04:44:23 = вер

=head3 MMMd (d MMM)

   2008-02-05T18:30:30 = 5 лют
   1995-12-22T09:05:02 = 22 сне
  -0010-09-15T04:44:23 = 15 вер

=head3 MMMEd (E, d MMM)

   2008-02-05T18:30:30 = аў, 5 лют
   1995-12-22T09:05:02 = пт, 22 сне
  -0010-09-15T04:44:23 = сб, 15 вер

=head3 MMMMd (MMMM d)

   2008-02-05T18:30:30 = люты 5
   1995-12-22T09:05:02 = снежань 22
  -0010-09-15T04:44:23 = верасень 15

=head3 MMMMEd (MMMM d, EEEE)

   2008-02-05T18:30:30 = люты 5, аўторак
   1995-12-22T09:05:02 = снежань 22, пятніца
  -0010-09-15T04:44:23 = верасень 15, субота

=head3 ms (mm:ss)

   2008-02-05T18:30:30 = 30:30
   1995-12-22T09:05:02 = 05:02
  -0010-09-15T04:44:23 = 44:23

=head3 y (y)

   2008-02-05T18:30:30 = 2008
   1995-12-22T09:05:02 = 1995
  -0010-09-15T04:44:23 = -10

=head3 yM (MM/yyyy)

   2008-02-05T18:30:30 = 02/2008
   1995-12-22T09:05:02 = 12/1995
  -0010-09-15T04:44:23 = 09/-010

=head3 yMEd (EEE, dd/MM/yyyy)

   2008-02-05T18:30:30 = аў, 05/02/2008
   1995-12-22T09:05:02 = пт, 22/12/1995
  -0010-09-15T04:44:23 = сб, 15/09/-010

=head3 yMMM (MMM y)

   2008-02-05T18:30:30 = лют 2008
   1995-12-22T09:05:02 = сне 1995
  -0010-09-15T04:44:23 = вер -10

=head3 yMMMEd (EEE, d MMM y)

   2008-02-05T18:30:30 = аў, 5 лют 2008
   1995-12-22T09:05:02 = пт, 22 сне 1995
  -0010-09-15T04:44:23 = сб, 15 вер -10

=head3 yMMMM (MMMM y)

   2008-02-05T18:30:30 = люты 2008
   1995-12-22T09:05:02 = снежань 1995
  -0010-09-15T04:44:23 = верасень -10

=head3 yQ (Q 'кв'. y)

   2008-02-05T18:30:30 = 1 кв. 2008
   1995-12-22T09:05:02 = 4 кв. 1995
  -0010-09-15T04:44:23 = 3 кв. -10

=head3 yQQQ (QQQ y)

   2008-02-05T18:30:30 = 1-шы кв. 2008
   1995-12-22T09:05:02 = 4-ты кв. 1995
  -0010-09-15T04:44:23 = 3-ці кв. -10

=head3 yyQ (Q yy)

   2008-02-05T18:30:30 = 1 08
   1995-12-22T09:05:02 = 4 95
  -0010-09-15T04:44:23 = 3 -10

=head3 yyyyM (MM/yyyy)

   2008-02-05T18:30:30 = 02/2008
   1995-12-22T09:05:02 = 12/1995
  -0010-09-15T04:44:23 = 09/-010

=head3 yyyyMMMM (MMMM y)

   2008-02-05T18:30:30 = люты 2008
   1995-12-22T09:05:02 = снежань 1995
  -0010-09-15T04:44:23 = верасень -10

=head2 Miscellaneous

=head3 Prefers 24 hour time?

Yes

=head3 Local first day of the week

панядзелак


=head1 SUPPORT

See L<DateTime::Locale>.

=head1 AUTHOR

Dave Rolsky <autarch@urth.org>

=head1 COPYRIGHT

Copyright (c) 2008 David Rolsky. All rights reserved. This program is
free software; you can redistribute it and/or modify it under the same
terms as Perl itself.

This module was generated from data provided by the CLDR project, see
the LICENSE.cldr in this distribution for details on the CLDR data's
license.

=cut
