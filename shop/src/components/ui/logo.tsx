import { Image } from '@/components/ui/image';
import cn from 'classnames';
import Link from '@/components/ui/link';

const Logo: React.FC<React.AnchorHTMLAttributes<{}>> = ({
  className,
  ...props
}) => {
  return (
    <Link href="/" className={cn('inline-flex', className)} {...props}>
      <span className="relative h-10 w-32 overflow-hidden md:w-40">
        <Image
          src="http://localhost:8000/assets/uploads/logo/nexen_logo.png"
          alt="Nenxen Health"
          fill
          sizes="(max-width: 768px) 100vw"
          loading="eager"
          className="object-contain"
        />
      </span>
    </Link>
  );
};

export default Logo;
