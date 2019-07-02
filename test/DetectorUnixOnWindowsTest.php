<?php
/**
 * -- php-os-detector --
 * DetectorUnixOnWindowsTest.php created at 18-12-2014
 *
 * Copyright 2014 Estevão Soares dos Santos
 *
 * Licensed under the Apache License, Version 2.0 (the "License");
 * you may not use this file except in compliance with the License.
 * You may obtain a copy of the License at
 *
 *     http://www.apache.org/licenses/LICENSE-2.0
 *
 * Unless required by applicable law or agreed to in writing, software
 * distributed under the License is distributed on an "AS IS" BASIS,
 * WITHOUT WARRANTIES OR CONDITIONS OF ANY KIND, either express or implied.
 * See the License for the specific language governing permissions and
 * limitations under the License.
 **/

namespace Tivie\OS\Test;

use Tivie\OS\Detector;

class DetectorUnixOnWindowsTest extends DetectorBase
{
    /**
     * @depends testGetters
     */
    public function testDetection()
    {
        $os = new Detector();

        self::assertEquals(UNIX_ON_WINDOWS_FAMILY, $os->getFamily());

        $haystack = array(MSYS, CYGWIN);
        self::assertContains($os->getType(), $haystack);

        self::assertContains($os->getKernelName(), $haystack, '', true);
    }
}
